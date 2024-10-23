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

 'accepted' => ':attribute کو قبول کرنا ضروری ہے۔',
'accepted_if' => ':attribute کو قبول کرنا ضروری ہے جب :other :value ہو۔',
'active_url' => ':attribute ایک درست URL ہونا چاہیے۔',
'after' => ':attribute کو :date کے بعد کی تاریخ ہونا چاہیے۔',
'after_or_equal' => ':attribute کو :date کے برابر یا اس کے بعد کی تاریخ ہونا چاہیے۔',
'alpha' => ':attribute میں صرف حروف شامل ہونے چاہئیں۔',
'alpha_dash' => ':attribute میں صرف حروف، نمبرز، ڈیش اور انڈراسکور شامل ہو سکتے ہیں۔',
'alpha_num' => ':attribute میں صرف حروف اور نمبرز شامل ہو سکتے ہیں۔',
'array' => ':attribute ایک ارے (array) ہونا چاہیے۔',
'ascii' => ':attribute میں صرف ایک بائٹ کے الفاظ اور علامات ہونے چاہئیں۔',
'before' => ':attribute کو :date سے پہلے کی تاریخ ہونا چاہیے۔',
'before_or_equal' => ':attribute کو :date کے برابر یا اس سے پہلے کی تاریخ ہونا چاہیے۔',
'between' => [
    'array' => ':attribute میں :min اور :max کے درمیان اشیاء ہونی چاہئیں۔',
    'file' => ':attribute :min اور :max کلو بائٹس کے درمیان ہونا چاہیے۔',
    'numeric' => ':attribute :min اور :max کے درمیان ہونا چاہیے۔',
    'string' => ':attribute :min اور :max حروف کے درمیان ہونا چاہیے۔',
],
'boolean' => ':attribute فیلڈ صحیح یا غلط ہونا چاہیے۔',
'can' => ':attribute میں غیر مجاز قدر شامل ہے۔',
'confirmed' => ':attribute کی تصدیق میل نہیں کھاتی۔',
'current_password' => 'پاس ورڈ غلط ہے۔',
'date' => ':attribute ایک درست تاریخ ہونا چاہیے۔',
'date_equals' => ':attribute کو :date کے برابر ہونا چاہیے۔',
'date_format' => ':attribute کو :format فارمیٹ کے مطابق ہونا چاہیے۔',
'decimal' => ':attribute میں :decimal اعشاریے ہونے چاہئیں۔',
'declined' => ':attribute کو رد کرنا ضروری ہے۔',
'declined_if' => ':attribute کو رد کرنا ضروری ہے جب :other :value ہو۔',
'different' => ':attribute اور :other مختلف ہونے چاہئیں۔',
'digits' => ':attribute کو :digits ہندسے ہونے چاہئیں۔',
'digits_between' => ':attribute :min اور :max ہندسوں کے درمیان ہونا چاہیے۔',
'dimensions' => ':attribute کے امیج کی پیمائش غلط ہے۔',
'distinct' => ':attribute میں ڈپلیکٹ ویلیو موجود ہے۔',
'doesnt_end_with' => ':attribute درج ذیل میں سے کسی ایک کے ساتھ ختم نہیں ہونا چاہیے: :values۔',
'doesnt_start_with' => ':attribute درج ذیل میں سے کسی ایک کے ساتھ شروع نہیں ہونا چاہیے: :values۔',
'email' => ':attribute ایک درست ای میل ایڈریس ہونا چاہیے۔',
'ends_with' => ':attribute کو درج ذیل میں سے کسی ایک پر ختم ہونا چاہیے: :values۔',
'enum' => 'منتخب کردہ :attribute غلط ہے۔',
'exists' => 'منتخب کردہ :attribute غلط ہے۔',
'file' => ':attribute فائل ہونی چاہیے۔',
'filled' => ':attribute میں کوئی ویلیو ہونا ضروری ہے۔',
'gt' => [
    'array' => ':attribute میں :value سے زیادہ اشیاء ہونی چاہئیں۔',
    'file' => ':attribute :value کلو بائٹس سے زیادہ ہونا چاہیے۔',
    'numeric' => ':attribute کو :value سے زیادہ ہونا چاہیے۔',
    'string' => ':attribute کو :value حروف سے زیادہ ہونا چاہیے۔',
],
'gte' => [
    'array' => ':attribute میں کم از کم :value اشیاء ہونی چاہئیں۔',
    'file' => ':attribute :value کلو بائٹس یا اس سے زیادہ ہونا چاہیے۔',
    'numeric' => ':attribute کو :value یا اس سے زیادہ ہونا چاہیے۔',
    'string' => ':attribute کو :value حروف یا اس سے زیادہ ہونا چاہیے۔',
],
'image' => ':attribute ایک تصویر ہونا چاہیے۔',
'in' => 'منتخب کردہ :attribute غلط ہے۔',
'in_array' => ':attribute فیلڈ :other میں موجود ہونا چاہیے۔',
'integer' => ':attribute ایک عددی عدد ہونا چاہیے۔',
'ip' => ':attribute ایک درست IP پتہ ہونا چاہیے۔',
'ipv4' => ':attribute ایک درست IPv4 پتہ ہونا چاہیے۔',
'ipv6' => ':attribute ایک درست IPv6 پتہ ہونا چاہیے۔',
'json' => ':attribute ایک درست JSON سٹرنگ ہونا چاہیے۔',
'lowercase' => ':attribute کو چھوٹے حروف میں ہونا چاہیے۔',
'lt' => [
    'array' => ':attribute میں :value سے کم اشیاء ہونی چاہئیں۔',
    'file' => ':attribute :value کلو بائٹس سے کم ہونا چاہیے۔',
    'numeric' => ':attribute کو :value سے کم ہونا چاہیے۔',
    'string' => ':attribute کو :value حروف سے کم ہونا چاہیے۔',
],
'lte' => [
    'array' => ':attribute میں :value سے زیادہ اشیاء نہیں ہونی چاہئیں۔',
    'file' => ':attribute :value کلو بائٹس یا اس سے کم ہونا چاہیے۔',
    'numeric' => ':attribute کو :value یا اس سے کم ہونا چاہیے۔',
    'string' => ':attribute کو :value حروف یا اس سے کم ہونا چاہیے۔',
],
'mac_address' => ':attribute کو ایک درست MAC پتہ ہونا چاہیے۔',
'max' => [
    'array' => ':attribute میں :max سے زیادہ اشیاء نہیں ہونی چاہئیں۔',
    'file' => ':attribute کو :max کلو بائٹس سے زیادہ نہیں ہونا چاہیے۔',
    'numeric' => ':attribute کو :max سے زیادہ نہیں ہونا چاہیے۔',
    'string' => ':attribute کو :max حروف سے زیادہ نہیں ہونا چاہیے۔',
],
'max_digits' => ':attribute میں :max سے زیادہ ہندسے نہیں ہونے چاہئیں۔',
'mimes' => ':attribute کو :values قسم کی فائل ہونی چاہیے۔',
'mimetypes' => ':attribute کو :values قسم کی فائل ہونی چاہیے۔',
'min' => [
    'array' => ':attribute میں کم از کم :min اشیاء ہونی چاہئیں۔',
    'file' => ':attribute کم از کم :min کلو بائٹس ہونا چاہیے۔',
    'numeric' => ':attribute کم از کم :min ہونا چاہیے۔',
    'string' => ':attribute کم از کم :min حروف ہونا چاہیے۔',
],
'min_digits' => ':attribute میں کم از کم :min ہندسے ہونے چاہئیں۔',
'missing' => ':attribute فیلڈ غائب ہونا چاہیے۔',
'multiple_of' => ':attribute کو :value کا ایک مضاعف ہونا چاہیے۔',
'not_in' => 'منتخب کردہ :attribute غلط ہے۔',
'not_regex' => ':attribute کا فارمیٹ غلط ہے۔',
'numeric' => ':attribute ایک عدد ہونا چاہیے۔',
'password' => [
    'letters' => ':attribute میں کم از کم ایک حرف شامل ہونا چاہیے۔',
    'mixed' => ':attribute میں کم از کم ایک بڑا اور ایک چھوٹا حرف شامل ہونا چاہیے۔',
    'numbers' => ':attribute میں کم از کم ایک نمبر شامل ہونا چاہیے۔',
    'symbols' => ':attribute میں کم از کم ایک علامت شامل ہونا چاہیے۔',
    'uncompromised' => 'فراہم کردہ :attribute ڈیٹا لیک میں شامل ہو چکا ہے۔ براہ کرم ایک مختلف :attribute منتخب کریں۔',
],
'present' => ':attribute فیلڈ موجود ہونا چاہیے۔',
'prohibited' => ':attribute فیلڈ ممنوع ہے۔',
'regex' => ':attribute کا فارمیٹ غلط ہے۔',
'required' => ':attribute فیلڈ ضروری ہے۔',
'unique' => ':attribute پہلے ہی استعمال ہو چکا ہے۔',
'uploaded' => ':attribute اپ لوڈ کرنے میں ناکام رہا۔',
'uppercase' => ':attribute کو بڑے حروف میں ہونا چاہیے۔',
'url' => ':attribute کو ایک درست URL ہونا چاہیے۔',


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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
