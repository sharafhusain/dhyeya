<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

if (!function_exists('app_translations_unique')) {
    /**
     * @param string $table
     * @param string $field
     * @param array $ignore
     * @return array
     */
    function app_translations_unique(string $table, string $field, array $ignore = [])
    {
        makeRequestSlug($field);
        $rules = [];
        foreach (config('app.locales') as $locale) {
            $rules[$locale.".".$field] = $rule = Rule::unique(Str::singular($table) . '_translations', $field)->where(function ($query) use ($locale, $field) {
//            $value = Str::slug(request()->($locale)[$field]);
                $query->where('locale', $locale);
//                dd($query->toSql(),$query->getBindings());
            })->ignore($ignore[$locale] ?? []);

        }
        return $rules;
    }
}
function getIgnoredTranslateIds(Model $model)
{
    return ["en" => $model->translations->where("locale","en")->pluck("id")->first(),
        "hi" => $model->translations->where("locale","hi")->pluck("id")->first()];
}

function makeRequestSlug($field){
    $request = request();
    $data = $request->all();
    $data[$field] = Str::slug($request[$field]);
    $request->merge($data);
}
