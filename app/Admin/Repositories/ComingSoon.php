<?php

namespace App\Admin\Repositories;

use Dcat\Admin\Grid;
use Dcat\Admin\Repositories\Repository;
use Illuminate\Pagination\LengthAwarePaginator;

class ComingSoon extends Repository
{
    protected $api = 'https://frodo.douban.com/api/v2/subject_collection/movie_showing/items?start=0&count=0?';

    protected $apiKey = 'apikey=054022eaeae0b00e0fc068c0c0a2102a';

    /**
     * 查询Form数据
     *
     * @param Grid\Model $model
     * @return LengthAwarePaginator
     */
    public function get(Grid\Model $model)
    {
        $currentPage = $model->getCurrentPage();
        $perPage = $model->getPerPage();

        // 获取筛选参数
        $city = 'Guangzhou';

        $start = ($currentPage - 1) * $perPage;

        $client = new \GuzzleHttp\Client();

        $response = $client->get("{$this->api}?{$this->apiKey}&city=$city&start=$start&count=$perPage");
        $data = json_decode((string)$response->getBody(), true);

        return $model->makePaginator(
            $data['total'] ?? 0,
            $data['subjects'] ?? []
        );
    }
}
