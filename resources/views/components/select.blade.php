<label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
       for="{{$id}}">
    {{$label}}
</label>

<select
    id="{{$id}}"
    name="{{$name}}"
    class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
    {{$required?'required':''}}
    oninvalid="this.setCustomValidity('{{$invalid_message}}')"
    oninput="this.setCustomValidity('')"
>
    <option value="" {{old($name) === ''?'selected':''}}>{{$placeholder}}</option>
    @foreach($options as $option)
        <option value="{{$option}}" {{old($name) === $option?'selected':''}}>{{__($option)}}</option>
    @endforeach
</select>
