<label hidden class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
       for="{{ $id }}">
    {{ $label }}
</label>

<input
    id="{{ $id }}"
    class="block w-full px-4 py-2 text-gray-700 bg-white  rounded-lg dark:bg-gray-800 dark:text-gray-300  focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
    type="{{$type}}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    {{$required?'required':''}}
    {{$disabled?'disabled':''}}
    autofocus
    autocomplete="{{ $autocomplete }}"
    value="{{$value}}"
    oninvalid="this.setCustomValidity('{{ $invalid_message }}')"
    oninput="validate(this)"
/>

<script>
    function validate(ele) {
        const validityState = ele.validity;
        if (validityState.valueMissing) {
            ele.setCustomValidity("error");
        }if (validityState.typeMismatch) {
            ele.setCustomValidity("error");
        } else {
            ele.setCustomValidity("");
        }

        ele.reportValidity();
    }
</script>
