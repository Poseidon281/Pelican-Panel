<?php

return [
    'notices' => [
        'imported' => 'تم استيراد هذا البيض والمتغيرات المرتبطة به بنجاح.',
        'updated_via_import' => 'تم تحديث هذا البيض باستخدام الملف المقدم.',
        'deleted' => 'تم حذف البيض المطلوب بنجاح من اللوحة.',
        'updated' => 'تم تحديث تكوين البيض بنجاح.',
        'script_updated' => 'تم تحديث سكريبت تثبيت البيض وسيتم تشغيله كلما تم تثبيت خوادم.',
        'egg_created' => 'تم وضع بيضة جديدة بنجاح. ستحتاج إلى إعادة تشغيل أي دايمونات جارية لتطبيق هذا البيض الجديد.',
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'تم حذف المتغير ":variable" ولن يكون متاحًا بعد الآن للخوادم بمجرد إعادة بنائها.',
            'variable_updated' => 'تم تحديث المتغير ":variable". ستحتاج إلى إعادة بناء أي خوادم تستخدم هذا المتغير لتطبيق التغييرات.',
            'variable_created' => 'تم إنشاء متغير جديد بنجاح وتعيينه لهذا البيض.',
        ],
    ],
    'descriptions' => [
        'name' => 'اسم بسيط قابل للقراءة البشرية لاستخدامه كمعرف لهذه البيضة.',
        'description' => 'وصف لهذه البيضة التي سيتم عرضها في جميع أقسام اللوحة حسب الحاجة.',
        'uuid' => 'This is the globally unique identifier for this Egg which Wings uses as an identifier.',
        'author' => 'The author of this version of the Egg. Uploading a new Egg configuration from a different author will change this.',
        'force_outgoing_ip' => "Forces all outgoing network traffic to have its Source IP NATed to the IP of the server's primary allocation IP.\nRequired for certain games to work properly when the Node has multiple public IP addresses.\nEnabling this option will disable internal networking for any servers using this egg, causing them to be unable to internally access other servers on the same node.",
        'startup' => 'أمر بدء التشغيل الافتراضي الذي يجب استخدامه للخوادم الجديدة باستخدام هذه البيضة.',
        'docker_images' => 'The docker images available to servers using this egg.',
    ],
];
