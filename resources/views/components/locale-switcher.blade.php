@if(app()->getLocale() === 'ar')
<div class="flex justify-end items-center">
    <a href="{{ route('localization', ['locale'=>'en']) }}"
       class="text-sm text-gray-500 uppercase  text-amber-300	 hover:underline">English</a>
</div>
@else
<div class="flex justify-end items-center">
    <a href="{{ route('localization', ['locale'=>'ar']) }}"
       class="text-sm text-gray-500 uppercase text-amber-300	 hover:underline">العربية</a>
</div>
@endif
