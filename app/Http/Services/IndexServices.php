<?php

namespace App\Http\Services;

use App\Models\Server;

class IndexServices
{
    public static function getServersList()
    {
        $data = Server::query()
            ->where('status', 'published')
            ->where('is_visible', '=', true)
            ->get();
        $currentDate = date('Y-m-d');

        // Скоро открываются
        $result['soonOpen'] = $data->where('open_date', '>', $currentDate);

        // Открываются сегодня
        $result['todayOpen'] = $data->where('open_date', $currentDate);

        // Открываются завтра
        $result['tomorrowOpen'] = $data->where('open_date',
            gmdate('Y-m-d', strtotime('+1 day')));

        // Открываются ближайшую неделю
        $result['weekOpen'] = $data->whereBetween('open_date', [gmdate('Y-m-d', strtotime('+2 day')),
            gmdate('Y-m-d', strtotime('+1 week'))]);

        // Открываются в течении месяца
        $result['weekPlusOpen'] = $data->where('open_date', '>',
            gmdate('Y-m-d', strtotime('+1 week')));

        // Уже открылись
        $result['alreadyOpen'] = $data->where('open_date', '<', $currentDate);

        // Открыты вчера
        $result['yesterdayOpen'] = $data->where('open_date', '=',
            gmdate('Y-m-d', strtotime('-1 day')));

        // Предыдущие 7 дней
        $result['lastWeekOpen'] = $data->whereBetween('open_date', [gmdate('Y-m-d', strtotime('-1 week')),
            gmdate('Y-m-d', strtotime('-2 day'))]);

        // Более недели назад
        $result['lastWeekPlusOpen'] = $data->where('open_date', '<', gmdate('Y-m-d', strtotime('-1 week')),
        gmdate('Y-m-d', strtotime('-2 week')));

        return $result;
    }
}
