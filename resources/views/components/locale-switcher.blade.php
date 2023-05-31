@if(app()->getLocale() === 'ar')
<div class="flex justify-end items-center">
    <a href="{{ route('localization', ['locale'=>'en']) }}"
       class="text-sm text-gray-500 uppercase dark:text-gray-400 hover:underline">English</a>
</div>
@else
<div class="flex justify-end items-center">
    <a href="{{ route('localization', ['locale'=>'ar']) }}"
       class="text-sm text-gray-500 uppercase dark:text-gray-400 hover:underline">العربية</a>
</div>
@endif
