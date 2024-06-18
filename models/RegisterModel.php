<?php 
namespace app\models;
class RegisterModel extends Model {
    public string $fullname;
    public string $email;
    public string $password;
    public string $confirm_password;
    public function save(){

    }
    public function rules(): array{
        return [
            "fullname" => [self::RULE_REQUIRE],
            "email" => [self::RULE_REQUIRE, self::RULE_EMAIL],
            "password" => [self::RULE_REQUIRE, [self::RULE_MATCH, "min" => 8]],
            "confirm_password" => [self::RULE_REQUIRE, [self::RULE_MATCH, "match" => "password"]],
        ] ;
    }
}