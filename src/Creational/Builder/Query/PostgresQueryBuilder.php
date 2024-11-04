<?php

namespace Src\Creational\Builder\Query;

class PostgresQueryBuilder extends MysqlQueryBuilder
{
    public function limit(int $start, int $offset): QueryBuilderInterface
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}
