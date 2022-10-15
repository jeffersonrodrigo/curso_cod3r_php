<?php // associação direta com o banco de dados
class User extends Model { // classe usuaria é classe herdeira da classe model
    protected static $tableName = 'users';
    protected static $columns = [
        'id',
        'name',
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin',
    ];
}