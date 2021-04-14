<?php

namespace BurgerDigital\eTapestry\Type;

class Attachment
{

    /**
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @var string
     */
    private $fileContent;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $mimeType;

    /**
     * @var string
     */
    private $ref;

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     * @return Attachment
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

        return $new;
    }

    /**
     * @return string
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }

    /**
     * @param string $fileContent
     * @return Attachment
     */
    public function withFileContent($fileContent)
    {
        $new = clone $this;
        $new->fileContent = $fileContent;

        return $new;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return Attachment
     */
    public function withFilename($filename)
    {
        $new = clone $this;
        $new->filename = $filename;

        return $new;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     * @return Attachment
     */
    public function withMimeType($mimeType)
    {
        $new = clone $this;
        $new->mimeType = $mimeType;

        return $new;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return Attachment
     */
    public function withRef($ref)
    {
        $new = clone $this;
        $new->ref = $ref;

        return $new;
    }


}

