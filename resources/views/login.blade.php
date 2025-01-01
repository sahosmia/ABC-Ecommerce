<x-guest-layout>
    <div class="container flex items-center justify-center min-h-screen ">
        <div class="w-full bg-utility-white_background bg-opacity-90 py-7 px-3 rounded-lg shadow">
            <h2 class="text-xl font-bold text-utility-title mb-3 text-center ">Sign In Your Account
            </h2>
            <form class="">
                <div class="flex flex-col mb-2">
                    <label class="mb-1 text-utility-label" for="username">Username</label>
                    <input class="rounded-lg p-2 mb-2 border border-utility-line" type="text"
                        placeholder="Enter username" class="w-full">
                    {{-- <span class="text-red-600 text-sm font-medium">This filed is requred</span> --}}
                </div>
                <div class="flex flex-col mb-2">
                    <label class="mb-1 text-utility-label" for="password">Password</label>
                    <input class="rounded-lg p-2 mb-2 border border-utility-line" type="password" placeholder="Password"
                        class="w-full inline-block">
                    {{-- <span class="text-red-600 text-sm font-medium">This filed is requred</span> --}}
                </div>
                <div class="mb-3">
                    <input type="checkbox" id="remember">
                    <label for="remember" class="text-utility-label ">Remember Password
                    </label>
                </div>

                <button class="button-full ">Sign In</button>
            </form>
            <a href="" class="text-center block mt-5 font-medium text-primary">Forget password</a>
        </div>
    </div>
</x-guest-layout>
