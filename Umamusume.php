<?php

class Umamusume {

    protected string $nome;
    protected int $speed;
    protected int $power;
    protected int $stamina;
    protected int $humor;
    protected int $energia;
    protected int $estilo;

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of speed
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     */
    public function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of power
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * Set the value of power
     */
    public function setPower(int $power): self
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get the value of stamina
     */
    public function getStamina(): int
    {
        return $this->stamina;
    }

    /**
     * Set the value of stamina
     */
    public function setStamina(int $stamina): self
    {
        $this->stamina = $stamina;

        return $this;
    }

    /**
     * Get the value of humor
     */
    public function getHumor(): int
    {
        return $this->humor;
    }

    /**
     * Set the value of humor
     */
    public function setHumor(int $humor): self
    {
        $this->humor = $humor;

        return $this;
    }

    /**
     * Get the value of energia
     */
    public function getEnergia(): int
    {
        return $this->energia;
    }

    /**
     * Set the value of energia
     */
    public function setEnergia(int $energia): self
    {
        $this->energia = $energia;

        return $this;
    }

    /**
     * Get the value of estilo
     */
    public function getEstilo(): int
    {
        return $this->estilo;
    }

    /**
     * Set the value of estilo
     */
    public function setEstilo(int $estilo): self
    {
        $this->estilo = $estilo;

        return $this;
    }
}