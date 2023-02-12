<div>
    <form wire:submit.prevent="formHire">
        @csrf
        {{-- <x-errors class="mb-2" /> --}}
        <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="name">Name</label>
            <input wire:model.lazy="name"
                class="w-full border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                type="text" id="name"
                placeholder="Enter your name">
            @if ($errors->has('name'))
              <span class="text-sm text-red-600">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="email">Email</label>
            <input wire:model.lazy="email"
                class="w-full border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                type="email" id="email"
                placeholder="Enter your email">
            @if ($errors->has('email'))
              <span class="text-sm text-red-600">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="purpose">Main purpose of your website</label>
            <textarea wire:model.lazy="purpose"
              class="w-full h-16 overflow-hidden border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
              oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
              type="text" id="purpose"
              placeholder="What is your website's purpose">
            </textarea>
            @if ($errors->has('purpose'))
              <span class="text-sm text-red-600">{{ $errors->first('purpose') }}</span>
            @endif
          </div>
          <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="audience">Your target audience</label>
              <textarea wire:model.lazy="audience"
                class="w-full h-16 overflow-hidden border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                type="text" id="audience"
                placeholder="Who is your target audience?">
              </textarea>
              @if ($errors->has('audience'))
               <span class="text-sm text-red-600">{{ $errors->first('audience') }}</span>
              @endif
          </div>
          <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="features">Features or functionality</label>
              <textarea wire:model.lazy="features"
                class="w-full h-16 overflow-hidden border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                type="text" id="features"
                placeholder="What website do you need (e.g. e-commerce, blog, contact form, etc.)?">
              </textarea>
              @if ($errors->has('features'))
                <span class="text-sm text-red-600">{{ $errors->first('features') }}</span>
              @endif
          </div>
          <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="budget">Budget</label>
              <textarea wire:model.lazy="budget"
                class="w-full h-16 overflow-hidden border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                type="text" id="budget"
                placeholder="What is your budget and timeline?">
              </textarea>
              @if ($errors->has('budget'))
                <span class="text-sm text-red-600">{{ $errors->first('budget') }}</span>
              @endif
          </div>
          <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="responsible">Responsibility after launch</label>
              <textarea wire:model.lazy="responsible"
                class="w-full h-16 overflow-hidden border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                type="text" id="responsible"
                placeholder="Who will be responsible for maintaining the website after it is launched?">
              </textarea>
              @if ($errors->has('responsible'))
                <span class="text-sm text-red-600">{{ $errors->first('responsible') }}</span>
              @endif
          </div>
          <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="weblike">Website you like</label>
              <textarea wire:model.lazy="weblike"
                class="w-full h-16 overflow-hidden border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                type="text" id="weblike"
                placeholder="Have you seen any websites that you like and would like to use as a reference?">
              </textarea>
              @if ($errors->has('weblike'))
                <span class="text-sm text-red-600">{{ $errors->first('weblike') }}</span>
              @endif
          </div>
          <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="design">Design preferences</label>
              <textarea wire:model.lazy="design"
                class="w-full h-16 overflow-hidden border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                type="text" id="design"
                placeholder="Do you have any specific design preferences or requirements?">
              </textarea>
              @if ($errors->has('design'))
                <span class="text-sm text-red-600">{{ $errors->first('design') }}</span>
              @endif
          </div>
          <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="brand">Brand materials</label>
              <textarea wire:model.lazy="brand"
                class="w-full h-16 overflow-hidden border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                type="text" id="brand"
                placeholder="Do you have any existing brand materials (e.g. logo, color scheme, etc.)?">
              </textarea>
              @if ($errors->has('brand'))
                <span class="text-sm text-red-600">{{ $errors->first('brand') }}</span>
              @endif
          </div>
          <div class="mb-4">
            <label class="block font-semibold text-gray-700 dark:text-gray-300" for="services">Additional services</label>
              <textarea wire:model.lazy="services"
                class="w-full h-16 overflow-hidden border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                type="text" id="services"
                placeholder="Will you need any additional services such as copywriting or photography?">
              </textarea>
              @if ($errors->has('services'))
                <span class="text-sm text-red-600">{{ $errors->first('services') }}</span>
              @endif
          </div>
        <x-button spinner loadingDelay="short" type="submit" primary>
            Send Message</x-button>
    </form>
</div>
