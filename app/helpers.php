<?php

if (! function_exists('speciality_first_or_create')) {
    /**
     * Create speciality if not exists and return new o already existing speciality.
     */
    function speciality_first_or_create($code, $name, $description)
    {
        try {
            $speciality = Speciality::create([
                'code' => $code,
                'name' => $name,
                'description' => $description,
            ]);
            return $speciality;
        } catch (Illuminate\Database\QueryException $e) {
            return Speciality::where([
                ['code', '=', $code]
            ]);
        }
    }
}

