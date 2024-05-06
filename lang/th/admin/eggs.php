<?php

return [
    'notices' => [
        'imported' => 'นำเข้าไข่นี้และตัวแปรที่เกี่ยวข้องเรียบร้อยแล้ว',
        'updated_via_import' => 'ไข่นี้ได้รับการอัปเดตโดยใช้ไฟล์ที่นำเข้ามา',
        'deleted' => 'ลบไข่ออกจากแผงควบคุมเรียบร้อยแล้ว',
        'updated' => 'อัปเดตการตั้งค่าไข่สำเร็จแล้ว',
        'script_updated' => 'สคริปต์การติดตั้งไข่ได้รับการอัปเดตแล้ว และจะทำงานทุกครั้งที่ติดตั้งเซิร์ฟเวอร์',
        'egg_created' => 'วางไข่ใหม่เรียบร้อยแล้ว คุณจะต้องรีสตาร์ทดีมอนที่กำลังวิ่งอยู่เพื่อใช้ไข่ใหม่นี้',
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'ตัวแปร ":variable" ถูกลบแล้ว และจะไม่สามารถใช้ได้อีกต่อไปสำหรับเซิร์ฟเวอร์เมื่อสร้างใหม่แล้ว',
            'variable_updated' => 'อัปเดตตัวแปร ":variable" แล้ว คุณจะต้องสร้างเซิร์ฟเวอร์ใหม่โดยใช้ตัวแปรนี้เพื่อใช้การเปลี่ยนแปลง',
            'variable_created' => 'สร้างตัวแปรใหม่และกำหนดให้กับไข่นี้สำเร็จแล้ว',
        ],
    ],
    'descriptions' => [
        'name' => 'ชื่อที่เรียบง่ายและมนุษย์สามารถอ่านได้เพื่อใช้เป็นตัวระบุ Egg นี้',
        'description' => 'คำอธิบายของ Egg นี้ที่จะแสดงทั่วทั้งแผงควบคุมตามความจำเป็น',
        'uuid' => 'นี่คือตัวระบุสำหรับ Egg นี้ซึ่ง Wings ใช้เป็นตัวระบุ',
        'author' => 'ผู้เขียน Egg เวอร์ชันนี้ การอัปโหลดการกำหนดค่า Egg ใหม่จากผู้เขียนรายอื่นจะเปลี่ยนผู้เขียน',
        'force_outgoing_ip' => "บังคับให้การรับส่งข้อมูลเครือข่ายขาออกทั้งหมดมี IP ต้นทาง NATed เป็น IP ของ IP การจัดสรรหลักของเซิร์ฟเวอร์\nจำเป็นสำหรับเกมบางเกมเพื่อให้ทำงานได้อย่างถูกต้องเมื่อโหนดมีที่อยู่ IP สาธารณะหลายรายการ\nการเปิดใช้งานตัวเลือกนี้จะปิดใช้งานเครือข่ายภายในสำหรับเซิร์ฟเวอร์ใดๆ ที่ใช้ Egg นี้ ส่งผลให้ไม่สามารถเข้าถึงเซิร์ฟเวอร์อื่นๆ ภายในบนโหนดเดียวกันได้",
        'startup' => 'คำสั่งเริ่มต้นที่ควรใช้กับเซิร์ฟเวอร์ใหม่ที่ใช้ Egg นี้',
        'docker_images' => 'อิมเมจ Docker พร้อมใช้งานสำหรับเซิร์ฟเวอร์ที่ใช้ Egg นี้',
    ],
];
