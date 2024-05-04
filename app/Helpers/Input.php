<?php

namespace App\Helpers;

use App\Models\MediaLibrary;
use function boolval;
use function explode;

class Input {
    public static function textField($name, $label = '', $errorHandling = TRUE, $extraClasses = '', $default = '', $disabled = FALSE) {
        return view('layouts.dashboard.partials.input-fields.text', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'extraClasses' => $extraClasses,
            'default' => $default,
            'disabled' => $disabled,
        ]);
    }

    public static function emailField($name, $label = '', $errorHandling = TRUE, $extraClasses = '', $default = '', $disabled = FALSE) {
        return view('layouts.dashboard.partials.input-fields.email', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'extraClasses' => $extraClasses,
            'default' => $default,
            'disabled' => $disabled,
        ]);
    }
    
    public static function selectField($name, $label = '', $errorHandling = TRUE, $options = [], $extraClasses = '', $optionValue = 'id', $optionText = 'name', $selectedValue = '', $optionsSkip = []) {
        return view('layouts.dashboard.partials.input-fields.select', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'extraClasses' => $extraClasses,
            'options' => $options,
            'optionValue' => $optionValue,
            'optionText' => $optionText,
            'selectedValue' => $selectedValue,
            'optionsSkip' => $optionsSkip,
        ]);
    }

    public static function textAreaField($name, $label = '', $errorHandling = TRUE, $extraClasses = '', $default = '') {
        return view('layouts.dashboard.partials.input-fields.text-area', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'extraClasses' => $extraClasses,
            'default' => $default,
        ]);
    }

    public static function inputTagify($name, $label = '', $errorHandling = TRUE, $enforceWhitelist = TRUE, $selectedValues = [], $inputs = [], $objectValue = 'id', $optionText = 'name') {

        $filteredInput = [];
        foreach ($inputs as $input) {
            $filteredInput[] = [
                'code' => $input->{$objectValue},
                'value' => $input->{$optionText},
            ];
        }

        $selectedInputs = [];

        foreach ($selectedValues as $selectedValue) {
            $selectedInputs[] = [
                'code' => $selectedValue->{$objectValue},
                'value' => $selectedValue->{$optionText},
            ];
        }


        if (old($name)) {
            foreach (json_decode(old($name)) as $key => $old) {
                $selectedInputs[$key]['value'] = $old->value;
                if (isset($old->code)) {
                    $selectedInputs[$key]['code'] = $old->code;
                }
            }
        }

        return view('layouts.dashboard.partials.input-fields.tagify', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'options' => json_encode($filteredInput),
            'selectedInputs' => json_encode($selectedInputs),
            'enforceWhitelist' => boolval($enforceWhitelist),
        ]);
    }

    public static function inputAjaxTagify($name, $label = '', $errorHandling = TRUE, $enforceWhitelist = TRUE, $selectedValues = [], $inputs = [], $objectValue = 'id', $optionText = 'name') {
        $filteredInput = [];
        foreach ($inputs as $input) {
            $filteredInput[] = [
                'code' => $input->{$objectValue},
                'value' => $input->{$optionText},
            ];
        }

        $selectedInputs = [];

        foreach ($selectedValues as $selectedValue) {
            $selectedInputs[] = [
                'code' => $selectedValue->{$objectValue},
                'value' => $selectedValue->{$optionText},
            ];
        }


        if (old($name)) {
            foreach (json_decode(old($name)) as $key => $old) {
                $selectedInputs[$key]['value'] = $old->value;
                if (isset($old->code)) {
                    $selectedInputs[$key]['code'] = $old->code;
                }
            }
        }

        return view('layouts.dashboard.partials.input-fields.ajax-tagify', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'options' => json_encode($filteredInput),
            'selectedInputs' => json_encode($selectedInputs),
            'enforceWhitelist' => boolval($enforceWhitelist),
        ]);
    }

    public static function checkbox($name, $label = '', $value = '', $errorHandling = TRUE, $extraClasses = '', $checked = FALSE) {
        return view('layouts.dashboard.partials.input-fields.checkbox', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'value' => $value,
            'extraClasses' => $extraClasses,
            'checked' => $checked,
        ]);
    }

    public static function switchButton($name, $label = '', $value = '', $errorHandling = TRUE, $extraClasses = '', $checked = FALSE) {
        return view('layouts.dashboard.partials.input-fields.switch-button', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'value' => $value,
            'extraClasses' => $extraClasses,
            'checked' => $checked,
        ]);
    }

    public static function image($name, $label = '', $errorHandling = TRUE, $default = '') {
        $medias = [];
        if (!empty($default)) {
            $medias = MediaLibrary::whereIn('id', explode(',', $default))->get();
        }

        return view('layouts.dashboard.partials.input-fields.image', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'default' => $default,
            'medias' => $medias,
        ]);
    }

    public static function password($name, $label = '', $errorHandling = TRUE, $extraClasses = '') {
        return view('layouts.dashboard.partials.input-fields.password', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'extraClasses' => $extraClasses,
        ]);
    }

    public static function number($name, $label = '', $errorHandling = TRUE, $extraClasses = '', $minimum = 0, $maximum = 0, $default = 0, $disabled = FALSE) {
        return view('layouts.dashboard.partials.input-fields.number', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'extraClasses' => $extraClasses,
            'default' => $default,
            'minimum' => $minimum,
            'maximum' => $maximum,
            'disabled' => $disabled,
        ]);
    }
    
    public static function file($name, $label, $selectedFile = '', $selectedFileType = '.png, .jpg, .jpeg') {
        return view('layouts.dashboard.partials.input-fields.file', [
            'name' => $name,
            'label' => $label,
            'selectedFile' => $selectedFile,
            'accept' => $selectedFileType,
        ]);
    }
    public static function dateField($name, $label = '', $errorHandling = TRUE, $extraClasses = '', $default = '', $disabled = FALSE) {
        return view('layouts.dashboard.partials.input-fields.date', [
            'name' => $name,
            'errorHandling' => $errorHandling,
            'label' => $label,
            'extraClasses' => $extraClasses,
            'default' => $default,
            'disabled' => $disabled,
        ]);
    }
}