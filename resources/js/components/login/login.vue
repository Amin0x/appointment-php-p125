<template>
    <div id="app" class="bg-sky-700 h-screen pt-12">
        <div class="flex justify-center justify-items-center items-center content-center">
            <div class="shadow-sm rounded-lg bg-white p-4 w-1/5 md:w-100">
                <div>
                    <div class="text-3xl text-center">
                        <h2>تسجيل الدخول</h2>
                    </div>
                </div>

                <div class="mt-8">
                    <input type="text" placeholder="اسم المستخدم" class="w-full p-3 rounded border-cyan-600 border">
                </div>
                <div class="mt-3">
                    <input type="password" placeholder="كلمة المرور" class="w-full p-3 rounded border-cyan-600 border">
                </div>

                <p class="text-sm text-slate-400 hover:text-slate-700"><a href="#">نسيت كلمة السر؟</a></p>
                <div class="mt-5">
                    <button class="bg-lime-600 hover:bg-lime-800 text-slate-100 p-3 w-full rounded-2xl">دخول</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: "Login",
  setup(props) {},
  data() {
    return {
      count: 0,
    };
  },
  methods: {},
};
</script>

<style>
</style>
