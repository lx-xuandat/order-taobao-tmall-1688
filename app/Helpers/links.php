<?php

if (! function_exists('clean_link_shop')) {
    function clean_link_shop($url): string
    {
        try {
            $parsedUrl = parse_url($url);

            $scheme = $parsedUrl['scheme'] ?? throw new Exception('Ko tim thay scheme', 1);
            $host = $parsedUrl['host'] ?? throw new Exception('Ko tmim thay host', 1);

            return $scheme . '://' . $host;
        } catch (Exception $e) {
            throw $e;
        }
    }
}

// $a = clean_link_shop('https://shop12.taobao.com/');
// var_dump($a);

if (! function_exists('clean_link_item_taobao')) {
    function clean_link_item_taobao($url): array
    {
        try {
            $parsedUrl = parse_url($url);
            parse_str($parsedUrl['query'], $queryParams);

            $id = $queryParams['id'] ?? throw new Exception('Ko tim thay item id', 1);
            $skuId = $queryParams['skuId'] ?? throw new Exception('Ko tim thay sku id', 1);

            $scheme = $parsedUrl['scheme'] ?? throw new Exception('Ko tim thay scheme', 1);
            $host = $parsedUrl['host'] ?? throw new Exception('Ko tmim thay host', 1);
            $path = $parsedUrl['path'] ?? throw new Exception('Ko tim thay path', 1);

            $filteredParams = array_filter(['id' => $id, 'skuId' => $skuId]);
            $filteredQuery = http_build_query($filteredParams);
            $queryItem = http_build_query(array_filter(['id' => $id]));

            $skuLink =  $scheme . '://' . $host . $path . '?' . $filteredQuery;
            $itemLink =  $scheme . '://' . $host . $path . '?' . $queryItem;

            return [
                'item_link' => $itemLink,
                'sku_link' => $skuLink,
                'item_id' => $id,
                'sku_id' => $skuId,
            ];
        } catch (Exception $e) {
            throw $e;
        }
    }
}

// $a = clean_link_item_taobao('https://item.taobao.com/item.html?id=1&skuId=1');
// var_dump($a);
