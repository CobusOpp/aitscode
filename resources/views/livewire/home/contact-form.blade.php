<div>
  <form wire:submit.prevent="submitForm">
    @csrf
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
        <label class="block font-semibold text-gray-700 dark:text-gray-300" for="message">Message</label>
        <textarea wire:model.lazy="message"
          class="w-full h-32 overflow-hidden border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
          oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
          id="message" placeholder="Enter your message"></textarea>
          @if ($errors->has('message'))
          <span class="text-sm text-red-600">{{ $errors->first('message') }}</span>
        @endif
      </div>
    <x-button spinner loadingDelay="short" type="submit" primary>
        Send Message</x-button>
  </form>
</div>
