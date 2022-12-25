# project-coupon-website
I develop a website with framework "Laravel 9" . a website like Moupon and Takhfifan.

توجه: لطفا قبل از ران گرفتن پروژه ، دستورات زیر را اجرا نمائید:

ابتدا سه دستور زیر را به ترتیب اجرا نمائید تا کتابخانه ها و ملزومات پروژه به آن اضافه شود:

<code>composer install</code>

<code>npm install</code>

<code>npm run dev</code>


در ادامه فولدر پابلیک را به storage متصل میکنیم:
(این قسمت حتما انجام شود چون تصاویر کوپن ها در پوشه پابلیک ذخیره نمیشود بلکه در storage ذخیره می شود.)

<code>php artisan storage:link</code>

دستور زیر را جهت اضافه کردن یوزر پیاده کنید؛ رمز تمام کاربران 123456123 می باشد:

<code>php artisan migrate --seed</code>

سپس با یک یوزر ادمین وارد داشبورد شده و چند کوپون بسازید.

در نهایت از سایت استفاده کنید.

در صورت داشتن پیشنهاد یا انتقاد میتونید از طریق ایمیل زیر با من در میون بذارید.

navid.afzali12@gmail.com

Thank you!

