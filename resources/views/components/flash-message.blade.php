@if(flash()->message)
    <div class="p-4 mb-4 text-sm rounded-lg bg-red-50 {{ flash()->class }}" role="alert">
        <span class="font-medium">{{ flash()->message }}</span>
    </div>
@endif
