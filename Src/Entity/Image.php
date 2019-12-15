<?php declare (strict_types = 1);

namespace SCH\Unfi\Entity;


class Image
{
    private $path, $isMain = false, $baseName;

    /**
     * @return mixed
     */
    public function getBaseName()
    {
        return $this->baseName;
    }

    /**
     * @param mixed $baseName
     */
    public function setBaseName($baseName): void
    {
        $this->baseName = basename($baseName);
    }


    /**
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     */
    public function setPath(?string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return bool
     */
    public function isMain(): bool
    {
        return $this->isMain;
    }

    /**
     * @param bool $isMain
     */
    public function setIsMain(bool $isMain): void
    {
        $this->isMain = $isMain;
    }
}