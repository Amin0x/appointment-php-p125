<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app" class="bg-sky-700 h-screen pt-12">
        <div class="flex justify-center justify-items-center items-center content-center">
            <div class="shadow-sm rounded-lg bg-white p-4 md:w-1/2 lg:w-1/5 w-full mx-3">
                <div>
                    <div class="text-3xl text-center">
                        <h2>تسجيل الدخول</h2>
                    </div>
                </div>

                <div class="mt-8">
                    <input type="text" placeholder="رقم الهاتف" class="w-full p-3 rounded border-cyan-600 border">
                </div>
                <div class="mt-3">
                    <input type="text" placeholder="الاسم كامل" class="w-full p-3 rounded border-cyan-600 border">
                </div>
                <div class="mt-3">
                    <input type="password" placeholder="كلمة المرور" class="w-full p-3 rounded border-cyan-600 border">
                </div>
                <div class="mt-3">
                    <input type="password" placeholder=" تاكيد كلمة المرور" class="w-full p-3 rounded border-cyan-600 border">
                </div>

                <p class="text-sm text-slate-400 hover:text-slate-700"><a href="#">نسيت كلمة السر؟</a></p>
                <div class="mt-5">
                    <button class="bg-lime-600 hover:bg-lime-800 text-slate-100 p-3 w-full rounded-2xl">دخول</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
