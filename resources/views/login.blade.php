<x-guest-layout>
    <div class="container flex items-center justify-center min-h-screen ">
        <div class="w-full md:w-1/2 px-3 md:px-5 rounded-lg shadow bg-utility-white_background bg-opacity-90 py-7">
            <h2 class="mb-3 text-xl font-bold text-center text-utility-title ">Sign In Your Account
            </h2>
            <form class="">
                <div class="flex flex-col mb-2">
                    <label class="mb-1 text-utility-label" for="username">Username</label>
                    <input class="p-2 mb-2 border rounded-lg border-utility-line" type="text"
                        placeholder="Enter username" class="w-full">
                    {{-- <span class="text-sm font-medium text-red-600">This filed is requred</span> --}}
                </div>
                <div class="flex flex-col mb-2">
                    <label class="mb-1 text-utility-label" for="password">Password</label>
                    <input class="p-2 mb-2 border rounded-lg border-utility-line" type="password" placeholder="Password"
                        class="inline-block w-full">
                    {{-- <span class="text-sm font-medium text-red-600">This filed is requred</span> --}}
                </div>
                <div class="mb-3">
                    <input type="checkbox" id="remember">
                    <label for="remember" class="text-utility-label ">Remember Password
                    </label>
                </div>

                <button class="button-full ">Sign In</button>
            </form>
            <a href="" class="block mt-5 font-medium text-center text-primary">Forget password</a>
        </div>
    </div>
</x-guest-layout>
