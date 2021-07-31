<?php

namespace JassemChebli\TestJiraBundle\Service;


use JiraRestApi\Configuration\ArrayConfiguration;
use JiraRestApi\Issue\IssueService;
use JiraRestApi\JiraException;
use JiraRestApi\Project\ProjectService;

class ConfigurationService
{
    public function getConfiguration()
    {
        /*$filesystem = new Filesystem();
        return realpath(__DIR__ . '/../../../../web');*/
        // id org 09a842j2-c105-1280-775d-084jca8a6cj3
        // clé api iZfL6jwlodztqBujheIO
        // token VuCjdmHiHUqdM6V73cRsA548
        try {
            $iss = new IssueService(new ArrayConfiguration(
                array(
                    'jiraHost' => 'https://your-jira.host.com',
                    // for basic authorization:
                    'jiraUser' => 'cheblijassem@gmail.com',
                    'jiraPassword' => 'VuCjdmHiHUqdM6V73cRsA548',
                    // to enable session cookie authorization (with basic authorization only)
                    'cookieAuthEnabled' => true,
                    'cookieFile' => realpath(__DIR__ . '/../../../../web/upload/jira-cookie.txt'),
                    // if you are behind a proxy, add proxy settings
                    "proxyServer" => 'your-proxy-server',
                    "proxyPort" => 'proxy-port',
                    "proxyUser" => 'proxy-username',
                    "proxyPassword" => 'proxy-password',
                )
            ));

        } catch (JiraException $e) {
            return $e;
        } catch (\Exception $e) {
            return $e;
        }
        try {
            $proj = new ProjectService();

            $prjs = $proj->getAllProjects();

            foreach ($prjs as $p) {
            }
            dump(sprintf("Project Key:%s, Id:%s, Name:%s, projectCategory: %s", $p->key, $p->id, $p->name, $p->projectCategory['name']));
            return sprintf("Project Key:%s, Id:%s, Name:%s, projectCategory: %s", $p->key, $p->id, $p->name, $p->projectCategory['name']);
        } catch (JiraException $e) {
            return "Error Occured! " . $e->getMessage();
        }
    }
}