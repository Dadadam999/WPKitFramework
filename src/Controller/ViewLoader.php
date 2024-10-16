<?php

namespace wpkf\Controller;

use wpkf\Entity\View;

class ViewLoader
{
    /**
     * @var View[]
     */
    private array $views = [];

    public function load(string $name): void
    {
        if (array_key_exists($name, $this->views)) {
            $variables = $this->views[$name]->getVariables();
            extract($variables);
            ob_start();
            require $this->views[$name]->path;
            echo ob_get_clean();
        }
    }

    public function fetchViewContent(string $name): string|false
    {
        if (array_key_exists($name, $this->views)) {
            $variables = $this->views[$name]->getVariables();
            extract($variables);
            ob_start();
            require $this->views[$name]->path;
            return ob_get_clean();
        }

        return false;
    }

    public function add(View $view): void
    {
        if (!in_array($view, $this->views, true)) {
            $this->views[$view->name] = $view;
        }
    }

    public function delete(View $view): void
    {
        $key = array_search($view, $this->views, true);

        if ($key !== false) {
            unset($this->views[$key]);
        }
    }

    /**
     * Gets a view by name.
     */
    public function getView(string $name): ?View
    {
        return $this->views[$name] ?? null;
    }
}
