<?php

namespace App\Traits;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

trait LaporanTraits
{
    protected $counter = 0;
    public function mapData($tape): array
    {
        if ($this->tabels == 3) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_171'],
                $tape['indikator_male_female_186'],
                $tape['indikator_male_female_185'],
                number_format(($tape['indikator_male_female_185'] / $tape['indikator_male_female_171']) * 100, 2) . ' %',
                $tape['indikator_male_female_186'] > 0 ? number_format(($tape['indikator_male_female_185'] / $tape['indikator_male_female_186']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 4) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_208'],
                $tape['indikator_male_female_198'],
                $tape['indikator_male_female_199'],
                number_format(($tape['indikator_male_female_199'] / $tape['indikator_male_female_208']) * 100, 2) . ' %',
                $tape['indikator_male_female_198'] > 0 ? number_format(($tape['indikator_male_female_199'] / $tape['indikator_male_female_198']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 5) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_171'],
                $tape['indikator_male_female_186'],
                $tape['indikator_male_female_187'],
                number_format(($tape['indikator_male_female_187'] / $tape['indikator_male_female_171']) * 100, 2) . ' %',
                $tape['indikator_male_female_186'] > 0 ? number_format(($tape['indikator_male_female_187'] / $tape['indikator_male_female_186']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 6) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_209'],
                $tape['indikator_male_female_188'],
                $tape['indikator_male_female_189'],
                number_format(($tape['indikator_male_female_189'] / $tape['indikator_male_female_209']) * 100, 2) . ' %',
                $tape['indikator_male_female_188'] > 0 ? number_format(($tape['indikator_male_female_189'] / $tape['indikator_male_female_188']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 7) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_210'],
                $tape['indikator_male_female_190'],
                $tape['indikator_male_female_191'],
                number_format(($tape['indikator_male_female_191'] / $tape['indikator_male_female_210']) * 100, 2) . ' %',
                $tape['indikator_male_female_190'] > 0 ? number_format(($tape['indikator_male_female_191'] / $tape['indikator_male_female_190']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 8) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_211'],
                $tape['indikator_male_female_192'],
                $tape['indikator_male_female_193'],
                number_format(($tape['indikator_male_female_193'] / $tape['indikator_male_female_211']) * 100, 2) . ' %',
                $tape['indikator_male_female_192'] > 0 ? number_format(($tape['indikator_male_female_193'] / $tape['indikator_male_female_192']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 9) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_212'],
                $tape['indikator_male_female_196'],
                $tape['indikator_male_female_197'],
                number_format(($tape['indikator_male_female_197'] / $tape['indikator_male_female_212']) * 100, 2) . ' %',
                $tape['indikator_male_female_196'] > 0 ? number_format(($tape['indikator_male_female_197'] / $tape['indikator_male_female_196']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 10) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_213'],
                $tape['indikator_male_female_194'],
                $tape['indikator_male_female_195'],
                number_format(($tape['indikator_male_female_195'] / $tape['indikator_male_female_213']) * 100, 2) . ' %',
                $tape['indikator_male_female_194'] > 0 ? number_format(($tape['indikator_male_female_195'] / $tape['indikator_male_female_194']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 11) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_214'],
                $tape['indikator_male_female_200'],
                $tape['indikator_male_female_201'],
                number_format(($tape['indikator_male_female_201'] / $tape['indikator_male_female_214']) * 100, 2) . ' %',
                $tape['indikator_male_female_200'] > 0 ? number_format(($tape['indikator_male_female_201'] / $tape['indikator_male_female_200']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 12) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_6113'],
                $tape['indikator_male_female_202'],
                $tape['indikator_male_female_203'],
                $tape['indikator_male_female_6113'] > 0 ? number_format(($tape['indikator_male_female_203'] / $tape['indikator_male_female_6113']) * 100, 2) . ' %' : '#NA',
                $tape['indikator_male_female_202'] > 0 ? number_format(($tape['indikator_male_female_203'] / $tape['indikator_male_female_202']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 13) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_6114'],
                $tape['indikator_male_female_204'],
                $tape['indikator_male_female_205'],
                $tape['indikator_male_female_6114'] > 0 ? number_format(($tape['indikator_male_female_205'] / $tape['indikator_male_female_6114']) * 100, 2) . ' %' : '#NA',
                $tape['indikator_male_female_204'] > 0 ? number_format(($tape['indikator_male_female_205'] / $tape['indikator_male_female_204']) * 100, 2) . ' %' : '#NA',
            ];
        } elseif ($this->tabels == 14) {
            return [
                ++$this->counter,
                $tape['fasyankes'],
                $tape['indikator_male_female_6115'],
                $tape['indikator_male_female_206'],
                $tape['indikator_male_female_207'],
                $tape['indikator_male_female_6114'] > 0 ? number_format(($tape['indikator_male_female_207'] / $tape['indikator_male_female_6114']) * 100, 2) . ' %' : '#NA',
                $tape['indikator_male_female_206'] > 0 ? number_format(($tape['indikator_male_female_207'] / $tape['indikator_male_female_206']) * 100, 2) . ' %' : '#NA',
            ];
        }
        return [];
    }
}
