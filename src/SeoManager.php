<?php

namespace WallE\LaravelSeo;

class SeoManager
{
    protected array $data = [];

    public function set(string $key, string $value): self
    {
        $this->data[$key] = $value;
        return $this;
    }

    public function get(string $key, $default = null)
    {
        return $this->data[$key] ?? config("seo.$key", $default);
    }

    public function all(): array
    {
        return array_merge(config('seo'), $this->data);
    }
}
