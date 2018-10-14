<?php
namespace ikki646i\Github;

class Github
{
    public function __construct($token)
    {
        $this->auth = base64_encode($token);

        $this->opts = [
            'http' => [
                'method' => 'GET',
                'header' => [
                    'User-Agent: PHP',
                    "Authorization: Basic $this->auth",
                ],
            ],
        ];

        $this->context = stream_context_create($this->opts);
        $this->content = file_get_contents("http://api.github.com/user/repos?type=all", false, $this->context);
        $this->json = json_decode($this->content, true);
    }

    public function gitRepositories()
    {
        $output = [];
        foreach ($this->json as &$value) {
            array_push($output, ["full_name" => $value["full_name"], "html_url" => $value["html_url"]]);
        }
        return $output;
    }
}
