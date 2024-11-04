<?php

namespace Src\Creational\Builder\Query;

use stdClass;

class MysqlQueryBuilder implements QueryBuilderInterface
{
    protected $query;

    protected function reset(): void
    {
        $this->query = new stdClass();
    }

    public function select(string $table, array $fields): QueryBuilderInterface
    {
        $this->reset();

        $this->query->base = "SELECT " . implode(", ", $fields) . " FROM " . $table;

        $this->query->type = "SELECT";

        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): QueryBuilderInterface
    {
        if (!in_array($this->query->type, ['SELECT', 'UPDATE', 'DELETE'])) {
            throw new \Exception('Invalid query type');
        }

        $this->query->where[] = "$field $operator '$value'";

        return $this;
    }

    public function limit(int $start, int $offset): QueryBuilderInterface
    {
        if (!in_array($this->query->type, ['SELECT'])) {
            throw new \Exception('Invalid query type');
        }

        $this->query->limit = " LIMIT " . $start . ", " . $offset;

        return $this;
    }

    public function get(): string
    {
        $query = $this->query;

        $sql = $query->base;

        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }

        if (isset($query->limit)) {
            $sql .= $query->limit;
        }

        return $sql . ";";
    }
}
