<footer class="flex flex-col items-center justify-center h-auto py-6 mx-auto mt-16 text-center bg-white border border-gray-200 text-lg-start dark:bg-gray-700 dark:border-gray-600">

    <div class="m-4 font-bold text-center text-slate-800 dark:text-slate-100">
      <a href="/terms" rel="noopener noreferrer">Terms of Service</a> | <a href="/privacy" rel="noopener noreferrer">Privacy Policy</a>
    </div>
    <div class="w-3/4 mx-auto border-b-4 border-slate-600 dark:border-slate-200"></div>
      <!-- Copyright -->
      <div class="m-4 font-bold text-center text-slate-800 dark:text-slate-100">
        &copy; <?php
          $copyYear = 2021;
          $curYear = date('Y');
          echo $copyYear . (($copyYear != $curYear) ? ' - ' . $curYear : '');
          ?> | <a href="https://aitscode.com" target="_blank" rel="noopener noreferrer">aitscode.com</a>
      </div>
</footer>
