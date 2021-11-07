<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cnpjFilial' => $this->faker->localIpv4,
            'cnpjPosto' => $this->faker->localIpv4,
            'codCargo' => $this->faker->randomNumber(),
            'codEmpresa' => $this->faker->randomDigit,
            'codFilial' => $this->faker->randomDigit,
            'codLocal' => $this->faker->randomNumber(),
            'codRateio' => $this->faker->randomNumber(),
            'cpfColaborador' => $this->faker->localIpv4,
            'dataAdm' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'empSoc' => $this->faker->randomNumber(),
            'masLocal' => $this->faker->localIpv4,
            'nasColaborador' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'nomCargo' => $this->faker->jobTitle,
            'nomColaborador' => $this->faker->name,
            'nomEmpresa' => $this->faker->company,
            'nomFilial' => $this->faker->company,
            'nomPosto' => $this->faker->companySuffix,
            'nomRateio' => $this->faker->companySuffix,
            'numColab' => $this->faker->randomDigit,
            'retTipExa' => $this->faker->randomDigit,
            'sexColaborador' => $this->faker->title($gender = 'M'|'F') ,
        ];
    }
}
