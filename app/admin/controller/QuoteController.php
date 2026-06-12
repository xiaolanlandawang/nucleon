<?php

namespace app\admin\controller;

use cmf\controller\AdminBaseController;

class QuoteController extends AdminBaseController
{

    // 询价设置
    public function site(){
        $quote_setting = cmf_get_option('quote_site');
        $this->assign('site_info',$quote_setting);

        return $this->fetch();
    }


    public function sitePost(){
        if (!$this->request->isPost()) {
            $this->error('请求错误');
        }
        $data = $this->request->post();
        $site_info = [];

        if(!empty($data['image'])){
            $site_info['image'] = $data['image'];
        }

        // Parse commitments
        $commitments = [];
        if (!empty($data['commitment_title']) && is_array($data['commitment_title'])) {
            foreach ($data['commitment_title'] as $key => $title) {
                $title = trim((string)$title);
                $desc = trim((string)($data['commitment_desc'][$key] ?? ''));
                $img = trim((string)($data['commitment_image'][$key] ?? ''));
                if ($title !== '' || $desc !== '' || $img !== '') {
                    $commitments[] = [
                        'title' => $title,
                        'desc' => $desc,
                        'image' => $img
                    ];
                }
            }
        }
        $site_info['commitments'] = $commitments;

        cmf_set_option('quote_site', $site_info);

        $this->success('保存成功');
    }

}