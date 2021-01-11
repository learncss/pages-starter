<? $pages = collection('pages', ['folder' => $folder ?? '.', 'level' => 3,  'recurse' => 'true', 'filter' => ['visible' => 'true']])  ?>
<? foreach ($pages as $page) :?>

<a class="px-4 py-2 mt-2 font-semibold bg-transparent rounded dark:bg-transparent dark:focus:text-white dark:hover:text-white md:mt-0 md:ml-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline dark:focus:bg-gray-600 dark:hover:bg-gray-600<? if(!empty($page->path)){echo strpos(page()->path, $page->path) === 0 ? ' text-white bg-dark-green-500 is-active' : 'dark:text-gray-200';} ?>" href="<?= route($page); ?>"><?= $page->name; ?></a>
<? endforeach ?>