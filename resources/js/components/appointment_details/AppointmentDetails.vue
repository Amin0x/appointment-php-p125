<template>
     <div id="app" class="bg-sky-700 h-screen pt-12">
        <div class="flex justify-center justify-items-center items-center content-center">
            <div class="shadow-sm rounded-lg bg-white p-4 md:w-4/5 w-full mx-3">
                <div>
                    <div class="text-3xl">
                        <h2>تفاصبل المقابلة</h2>
                    </div>
                </div>
                <p>دكتور: احمد علي</p>
                <p>اخصائي الاطفال</p>
                <div class="mt-5">
                    <button class="bg-lime-600 hover:bg-lime-800 text-slate-100 p-3 px-6 rounded-2xl">اختيار موعد اخر</button>
                    <button class="bg-red-600 hover:bg-red-700 text-slate-100 p-3 px-6 rounded-2xl">الغاء المقابلة </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    setup () {


        return {}
    }
}
</script>

<style>
    .title-name{
        background-color: #2288dd;
        color: #fff;
    }
</style>
