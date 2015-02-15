<?php

namespace DesignPatterns\DataMapper;

class UserMapper
{
    /**
     * @var \PDO
     */
    protected $db;

    /**
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    /**
     * @param int $userId
     * @return User
     */
    public function getById($userId)
    {
        $stm = $this->db->prepare('SELECT * FROM user WHERE id = :id');
        $stm->setFetchMode(\PDO::FETCH_CLASS, 'DesignPatterns\DataMapper\User');
        $stm->bindValue(':id', $userId, \PDO::PARAM_INT);
        $stm->execute();

        return $stm->fetch();
    }

    /**
     * @param User $user
     */
    public function save(User $user)
    {
        // update
        if ($user->getId()) {
            $stm = $this->db->prepare('UPDATE user SET name = :name WHERE id = :id');
            $stm->bindValue(':name', $user->getName());
            $stm->bindValue(':id', $user->getId(), \PDO::PARAM_INT);
            $stm->execute();
        // insert
        } else {
            $stm = $this->db->prepare('INSERT INTO user (name) VALUES (:name)');
            $stm->bindValue(':name', $user->getName());
            $stm->execute();

            $user->setId($this->db->lastInsertId());
        }
    }
}
