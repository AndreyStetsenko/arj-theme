<?php

    /**
     * Получить следующую новость от текущей
     *
     * @param $id - ID текущей новости
     *
     * @return int - ID следующей новости
     */
    function get_news_next($id) {
        $id = (int) $id;
        $sql = "SELECT `id` FROM `news` WHERE `id` > " . escape_db($id);
        $sql .= " AND `admin_preview` = " . escape_db(0);
        $sql .= " AND `delete` = " . escape_db(1);
        $sql .= " LIMIT 1 ";
        $next_id = get_value($sql);
        if ($next_id) {
            return (int) $next_id;
        }

        return 0;
        }

    /**
     * Получить предыдущую новость от текущей
     *
     * @param $id - ID текущей новости
     *
     * @return int - ID предыдущей новости
     */
    function get_news_before($id) {
        $id = (int) $id;
        $sql = "SELECT `id` FROM `news` WHERE `id` < " . escape_db($id);
        $sql .= " AND `admin_preview` = " . escape_db(0);
        $sql .= " AND `delete` = " . escape_db(1);
        $sql .= " LIMIT 1 ";
        $before_id = get_value($sql);
        if ($before_id) {
            return (int) $before_id;
        }

        return 0;
        }

    function db_instants() {
        global $mysqli;

        return $mysqli;
            }


