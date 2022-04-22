<?php
    
    namespace Weliton\InitSlim\Domain;
    
    use DateTimeImmutable;
    use Doctrine\ORM\Mapping\Column;
    use Doctrine\ORM\Mapping\Entity;
    use Doctrine\ORM\Mapping\GeneratedValue;
    use Doctrine\ORM\Mapping\Id;
    use Doctrine\ORM\Mapping\Table;

#[Entity, Table(name: 'users')]
final class User
{
    #[Id,column(type:'integer'),GeneratedValue(strategy:'AUTO')]
    private int $id;

    #[Column(type:'string',unique:true,nullable:false)]
    private string $email;

    #[Column(name:'registered_at',type:'datetimetz_immutable',nullable:false)]
    private \DateTimeImmutable $registeredAt;

    public function __construct(string $email)
    {
        $this->email = $email;
        $this->registeredAt = new DateTimeImmutable('now');
    }

    

    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail():string
    {
        return $this->email;
    }



    /**
     * Get the value of registeredAt
     */ 
    public function getRegisteredAt():DateTimeImmutable
    {
        return $this->registeredAt;
    }
}