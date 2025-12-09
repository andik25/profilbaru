@if ($transformedData)
    @foreach ($transformedData as $datuk)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $datuk['fasyankes'] }}</td>
            @if ($tabels == 3)
                <td>{{ $datuk['indikator_male_female_171'] }}</td>
                <td>{{ $datuk['indikator_male_female_186'] }}</td>
                <td>{{ $datuk['indikator_male_female_185'] }}</td>
                <td>{{ number_format(($datuk['indikator_male_female_185'] / $datuk['indikator_male_female_171']) * 100, 2) }}%
                </td>
                <td>{{ $datuk['indikator_male_female_186'] > 0 ? number_format(($datuk['indikator_male_female_185'] / $datuk['indikator_male_female_186']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 4)
                <td>{{ $datuk['indikator_male_female_208'] }}</td>
                <td>{{ $datuk['indikator_male_female_198'] }}</td>
                <td>{{ $datuk['indikator_male_female_199'] }}</td>
                <td>{{ number_format(($datuk['indikator_male_female_199'] / $datuk['indikator_male_female_208']) * 100, 2) }}%
                </td>
                <td>{{ $datuk['indikator_male_female_198'] > 0 ? number_format(($datuk['indikator_male_female_199'] / $datuk['indikator_male_female_198']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 5)
                <td>{{ $datuk['indikator_male_female_171'] }}</td>
                <td>{{ $datuk['indikator_male_female_186'] }}</td>
                <td>{{ $datuk['indikator_male_female_187'] }}</td>
                <td>{{ number_format(($datuk['indikator_male_female_187'] / $datuk['indikator_male_female_171']) * 100, 2) }}%
                </td>
                <td>{{ $datuk['indikator_male_female_186'] > 0 ? number_format(($datuk['indikator_male_female_187'] / $datuk['indikator_male_female_186']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 6)
                <td>{{ $datuk['indikator_male_female_209'] }}</td>
                <td>{{ $datuk['indikator_male_female_188'] }}</td>
                <td>{{ $datuk['indikator_male_female_189'] }}</td>
                <td>{{ number_format(($datuk['indikator_male_female_189'] / $datuk['indikator_male_female_209']) * 100, 2) }}%
                </td>
                <td>{{ $datuk['indikator_male_female_188'] > 0 ? number_format(($datuk['indikator_male_female_189'] / $datuk['indikator_male_female_188']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 7)
                <td>{{ $datuk['indikator_male_female_210'] }}</td>
                <td>{{ $datuk['indikator_male_female_190'] }}</td>
                <td>{{ $datuk['indikator_male_female_191'] }}</td>
                <td>{{ number_format(($datuk['indikator_male_female_191'] / $datuk['indikator_male_female_210']) * 100, 2) }}%
                </td>
                <td>{{ $datuk['indikator_male_female_190'] > 0 ? number_format(($datuk['indikator_male_female_191'] / $datuk['indikator_male_female_190']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 8)
                <td>{{ $datuk['indikator_male_female_211'] }}</td>
                <td>{{ $datuk['indikator_male_female_192'] }}</td>
                <td>{{ $datuk['indikator_male_female_193'] }}</td>
                <td>{{ number_format(($datuk['indikator_male_female_193'] / $datuk['indikator_male_female_211']) * 100, 2) }}%
                </td>
                <td>{{ $datuk['indikator_male_female_192'] > 0 ? number_format(($datuk['indikator_male_female_193'] / $datuk['indikator_male_female_192']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 9)
                <td>{{ $datuk['indikator_male_female_212'] }}</td>
                <td>{{ $datuk['indikator_male_female_196'] }}</td>
                <td>{{ $datuk['indikator_male_female_197'] }}</td>
                <td>{{ number_format(($datuk['indikator_male_female_197'] / $datuk['indikator_male_female_212']) * 100, 2) }}%
                </td>
                <td>{{ $datuk['indikator_male_female_196'] > 0 ? number_format(($datuk['indikator_male_female_197'] / $datuk['indikator_male_female_196']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 10)
                <td>{{ $datuk['indikator_male_female_213'] }}</td>
                <td>{{ $datuk['indikator_male_female_194'] }}</td>
                <td>{{ $datuk['indikator_male_female_195'] }}</td>
                <td>{{ number_format(($datuk['indikator_male_female_195'] / $datuk['indikator_male_female_213']) * 100, 2) }}%
                </td>
                <td>{{ $datuk['indikator_male_female_194'] > 0 ? number_format(($datuk['indikator_male_female_195'] / $datuk['indikator_male_female_194']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 11)
                
                <td>{{ $datuk['indikator_male_female_214'] }}</td>
                <td>{{ $datuk['indikator_male_female_200'] }}</td>
                <td>{{ $datuk['indikator_male_female_201'] }}</td>
                <td>{{ number_format(($datuk['indikator_male_female_201'] / $datuk['indikator_male_female_214']) * 100, 2) }}%
                </td>
                <td>{{ $datuk['indikator_male_female_200'] > 0 ? number_format(($datuk['indikator_male_female_201'] / $datuk['indikator_male_female_200']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 12)
                <td>{{ $datuk['indikator_male_female_6113'] }}</td>
                <td>{{ $datuk['indikator_male_female_202'] }}</td>
                <td>{{ $datuk['indikator_male_female_203'] }}</td>
                <td>{{ $datuk['indikator_male_female_6113'] > 0 ? number_format(($datuk['indikator_male_female_203'] / $datuk['indikator_male_female_6113']) * 100, 2) : '#NA' }}%
                </td>
                <td>{{ $datuk['indikator_male_female_202'] > 0 ? number_format(($datuk['indikator_male_female_203'] / $datuk['indikator_male_female_202']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 13)
                <td>{{ $datuk['indikator_male_female_6114'] }}</td>
                <td>{{ $datuk['indikator_male_female_204'] }}</td>
                <td>{{ $datuk['indikator_male_female_205'] }}</td>
                <td>{{ $datuk['indikator_male_female_6114'] > 0 ? number_format(($datuk['indikator_male_female_205'] / $datuk['indikator_male_female_6114']) * 100, 2) : '#NA' }}%
                </td>
                <td>{{ $datuk['indikator_male_female_204'] > 0 ? number_format(($datuk['indikator_male_female_205'] / $datuk['indikator_male_female_204']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 14)
                <td>{{ $datuk['indikator_male_female_6115'] }}</td>
                <td>{{ $datuk['indikator_male_female_206'] }}</td>
                <td>{{ $datuk['indikator_male_female_207'] }}</td>
                <td>{{ $datuk['indikator_male_female_6115'] > 0 ? number_format(($datuk['indikator_male_female_207'] / $datuk['indikator_male_female_6115']) * 100, 2) : '#NA' }}%
                </td>
                <td>{{ $datuk['indikator_male_female_206'] > 0 ? number_format(($datuk['indikator_male_female_207'] / $datuk['indikator_male_female_206']) * 100, 2) : '#NA' }}%
                </td>
            @elseif ($tabels == 15)
                <td>{{ $datuk['indikator_male_female_171'] }}</td>
                <td>{{ $datuk['indikator_male_female_186'] }}</td>
                <td>{{ $datuk['indikator_male_female_185'] }}</td>
                
            @endif
        </tr>
    @endforeach
@endif

