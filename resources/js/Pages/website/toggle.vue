<template>
        <div class="container flex items-center justify-between mt-5">
            <div>
                <div class="flex gap-4">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <div>
                        <h1 class="text-sm text-ruby-700 font-medium">Remember me</h1>
                        <p class="font-normal text-sm text-ruby-600 mt-1">Save my login details for next time.</p>
                    </div>
                </div>
                <div class="flex gap-4 mt-5">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <div>
                        <h1 class="text-sm text-ruby-700 font-medium">Remember me</h1>
                        <p class="font-normal text-sm text-ruby-600 mt-1">Save my login details for next time.</p>
                    </div>
                </div>
                <div class="flex gap-4 mt-5">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <div>
                        <h1 class="text-sm text-ruby-700 font-medium">Remember me</h1>
                        <p class="font-normal text-sm text-ruby-600 mt-1">Save my login details for next time.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex gap-4">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <div>
                        <h1 class="text-sm text-ruby-700 font-medium">Remember me</h1>
                        <p class="font-normal text-sm text-ruby-600 mt-1">Save my login details for next time.</p>
                    </div>
                </div>
                <div class="flex gap-4 mt-5">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <div>
                        <h1 class="text-sm text-ruby-700 font-medium">Remember me</h1>
                        <p class="font-normal text-sm text-ruby-600 mt-1">Save my login details for next time.</p>
                    </div>
                </div>
                <div class="flex gap-4 mt-5">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <div>
                        <h1 class="text-sm text-ruby-700 font-medium">Remember me</h1>
                        <p class="font-normal text-sm text-ruby-600 mt-1">Save my login details for next time.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex gap-4">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <div>
                        <h1 class="text-sm text-ruby-700 font-medium">Remember me</h1>
                        <p class="font-normal text-sm text-ruby-600 mt-1">Save my login details for next time.</p>
                    </div>
                </div>
                <div class="flex gap-4 mt-5">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <div>
                        <h1 class="text-sm text-ruby-700 font-medium">Remember me</h1>
                        <p class="font-normal text-sm text-ruby-600 mt-1">Save my login details for next time.</p>
                    </div>
                </div>
                <div class="flex gap-4 mt-5">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <div>
                        <h1 class="text-sm text-ruby-700 font-medium">Remember me</h1>
                        <p class="font-normal text-sm text-ruby-600 mt-1">Save my login details for next time.</p>
                    </div>
                </div>
            </div>
        </div>
</template>
<style>
    .switch {
  position: relative;
  display: inline-block;
  width: 36px;
  height: 20px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #e5e7eb;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 2px;
  bottom: 2.5px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #9333ea;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(15px);
  -ms-transform: translateX(15px);
  transform: translateX(15px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>