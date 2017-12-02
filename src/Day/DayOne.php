<?php
declare(strict_types=1);

namespace App\Day;

class DayOne implements DayInterface
{
    /**
     * string
     */
    private $input;

    public function __construct(string $input, bool $isFilePath = true)
    {
        if ($isFilePath) {
            $this->input = file_get_contents($input);
        } else {
            $this->input = $input;
        }
    }

    public function partOne()
    {
        $inputArray = str_split($this->input);

        $firstChar = array_shift($inputArray);
        $previousChar = $firstChar;
        $total = 0;

        foreach ($inputArray as $currentChar) {
            if ($currentChar == $previousChar) {
                $total += $currentChar;
            }
            $previousChar = $currentChar;
        }

        if ($previousChar == $firstChar) {
            $total += $previousChar;
        }

        return $total;
    }

    public function partTwo()
    {
        $inputArray = str_split($this->input);

        $sets = array_chunk($inputArray, count($inputArray) / 2);
        $total = 0;

        for ($i = 0; $i < count($sets[0]); $i++) {
            if ($sets[0][$i] == $sets[1][$i]) {
                $total += $sets[0][$i] * 2;
            }
        }

        return $total;
    }
}
