<?php

namespace App\Models;

use App\Core\Model;

class Blogy extends \App\Core\Model
{

    public function __construct(public int $id = 0, public ?string $title = "",
                                public ?string $text = "", public ?string $login_fk = "")
    {
    }

    public static function setDbColumns()
    {
        return['id','title', 'text', 'login_fk'];
    }

    public static function setTableName()
    {
        return "blogy";
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string|null
     */
    public function getLoginFk(): ?string
    {
        return $this->login_fk;
    }

    /**
     * @param string|null $login_fk
     */
    public function setLoginFk(?string $login_fk): void
    {
        $this->login_fk = $login_fk;
    }
}