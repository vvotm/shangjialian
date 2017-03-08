<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ' :attribute 必须能接受',
    'active_url'           => ' :attribute 不是一个合法的url',
    'after'                => ' :attribute 时间在:date之后.',
    'after_or_equal'       => ' :attribute 大于或等于:data',
    'alpha'                => ' :attribute 仅仅包含字符',
    'alpha_dash'           => ' :attribute 必须宝行字符, 数字, 符号',
    'alpha_num'            => ' :attribute 仅包含数字, 字符',
    'array'                => ' :attribute 必须是个数组',
    'before'               => ' :attribute 必须在:date之前.',
    'before_or_equal'      => ' :attribute 与:date相等或, 以前',
    'between'              => [
        'numeric' => ' :attribute must be between :min and :max.',
        'file'    => ' :attribute must be between :min and :max kilobytes.',
        'string'  => ' :attribute must be between :min and :max characters.',
        'array'   => ' :attribute must have between :min and :max items.',
    ],
    'boolean'              => ' :attribute field must be true or false.',
    'confirmed'            => ' :attribute confirmation does not match.',
    'date'                 => ' :attribute is not a valid date.',
    'date_format'          => ' :attribute does not match the format :format.',
    'different'            => ' :attribute and :other must be different.',
    'digits'               => ' :attribute must be :digits digits.',
    'digits_between'       => ' :attribute must be between :min and :max digits.',
    'dimensions'           => ' :attribute has invalid image dimensions.',
    'distinct'             => ' :attribute field has a duplicate value.',
    'email'                => ' :attribute must be a valid email address.',
    'exists'               => ' selected :attribute is invalid.',
    'file'                 => ' :attribute must be a file.',
    'filled'               => ' :attribute field must have a value.',
    'image'                => ' :attribute must be an image.',
    'in'                   => ' selected :attribute is invalid.',
    'in_array'             => ' :attribute field does not exist in :other.',
    'integer'              => ' :attribute must be an integer.',
    'ip'                   => ' :attribute must be a valid IP address.',
    'json'                 => ' :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ' :attribute may not be greater than :max.',
        'file'    => ' :attribute may not be greater than :max kilobytes.',
        'string'  => ' :attribute may not be greater than :max characters.',
        'array'   => ' :attribute may not have more than :max items.',
    ],
    'mimes'                => ' :attribute must be a file of type: :values.',
    'mimetypes'            => ' :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ' :attribute must be at least :min.',
        'file'    => ' :attribute must be at least :min kilobytes.',
        'string'  => ' :attribute must be at least :min characters.',
        'array'   => ' :attribute must have at least :min items.',
    ],
    'not_in'               => ' selected :attribute is invalid.',
    'numeric'              => ' :attribute must be a number.',
    'present'              => ' :attribute field must be present.',
    'regex'                => ' :attribute format is invalid.',
    'required'             => ' :attribute 参数不能为空.',
    'required_if'          => ' :attribute field is required when :other is :value.',
    'required_unless'      => ' :attribute field is required unless :other is in :values.',
    'required_with'        => ' :attribute field is required when :values is present.',
    'required_with_all'    => ' :attribute field is required when :values is present.',
    'required_without'     => ' :attribute field is required when :values is not present.',
    'required_without_all' => ' :attribute field is required when none of :values are present.',
    'same'                 => ' :attribute and :other must match.',
    'size'                 => [
        'numeric' => ' :attribute must be :size.',
        'file'    => ' :attribute must be :size kilobytes.',
        'string'  => ' :attribute must be :size characters.',
        'array'   => ' :attribute must contain :size items.',
    ],
    'string'               => ' :attribute must be a string.',
    'timezone'             => ' :attribute must be a valid zone.',
    'unique'               => ' :attribute has already been taken.',
    'uploaded'             => ' :attribute failed to upload.',
    'url'                  => ' :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
