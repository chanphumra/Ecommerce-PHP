<div class="content">
    <div class='mb-9'>
        <div class="d-flex justify-content-between align-items-end">
            <div class="row g-3">
                <div class="col-auto">
                    <h2 class="mb-0">Size Setting</h2>
                </div>
            </div>
            <button onClick="" class='px-4 py-2 rounded bg-primary text-white text-sm cursor-pointer'>Save Change</button>
        </div>
        <div class="d-flex mt-5 gap-8 flex-col flex-md-row">
            <div class="flex-[2] bg-white p-5 rounded shadow">
                <div class='relative w-[150px] h-[150px] rounded-full border border-solid border-gray-300 bg-white shadow-sm'>
                    <img src="" alt="" class='w-full h-full rounded-full object-cover p-1' />
                    <i class="absolute fa-solid fa-pen-to-square w-[40px] h-[40px] leading-[40px] text-center text-primary cursor-pointer bg-white rounded-full right-0 bottom-[5px] shadow-sm border border-solid border-gray-300"></i>
                    <input onChange={previewImage} ref={imageRef} type='file' class="opacity-0 absolute fa-solid fa-pen-to-square w-[40px] h-[40px] leading-[40px] text-center text-primary cursor-pointer bg-white rounded-full right-0 bottom-[5px] shadow-md border border-solid border-gray-300" />
                </div>
                <div class="mt-5">
                    <p class='mb-2'>Company name</p>
                    <input ref="" type="text" class='rounded border border-solid w-full' placeholder='company name' />
                </div>
            </div>
            <div class="flex-[4] bg-white p-5 rounded shadow">
                <h2 class='text-xl font-semibold'>General information</h2>
                <div class="d-flex flex-col flex-md-row gap-4 gap-md-8 w-full mt-5">
                    <div class="w-full">
                        <p class='mb-2'>City</p>
                        <input ref="" type="text" class='rounded border border-solid w-full' placeholder='phnom penh' />
                    </div>
                    <div class="w-full">
                        <p class='mb-2'>Country</p>
                        <input ref="" type="text" class='rounded border border-solid w-full' placeholder='cambodia' />
                    </div>
                </div>
                <div class="d-flex flex-col md:flex-row gap-4 md:gap-8 w-full mt-3">
                    <div class="w-full">
                        <p class='mb-2'>Phone</p>
                        <input ref="" type="text" class='rounded border border-solid w-full' placeholder='+1234567890' />
                    </div>
                    <div class="w-full">
                        <p class='mb-2'>Email</p>
                        <input ref="" type="text" class='rounded border border-solid w-full' placeholder='company@gmail.com' />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>