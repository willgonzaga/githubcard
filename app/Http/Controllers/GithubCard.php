<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GithubCard extends Controller
{
    public function getCard(Request $request)
    {
        $user = $request->query('user');
        $repo = $request->query('repo');
        $token = $_ENV['TOKENGITHUB'];

        function infoRepo($user, $repo, $token)
        {
            $url = "https://api.github.com/repos/$user/$repo";

            try {
                $response = Http::withHeaders([
                    'Accept' => 'application/vnd.github.v3+json',
                    'Authorization' => "Bearer $token",
                    'X-GitHub-Api-Version' => '2022-11-28',
                ])->get($url);

                if(isset($response['message']) && $response['message'] == 'Not Found') {
                    die('Repositório não encontrado');
                }

                return json_decode($response, true);
            } catch (\Exception $e) {
                die('Erro na solicitação: ' . $e->getMessage());
            }
        }

        $data = infoRepo($user, $repo, $token);
        $data = [
            'user' => $data['owner']['login'],
            'repo' => $data['name'],
            'desc' => $data['description'],
            'lang' => $data['language'],
            'forks' => $data['forks'],
            'stars' => $data['stargazers_count']
        ];
        
        $coreslangs = array(
            "JavaScript" => "#f1e05a",
            "Python" => "#3572A5",
            "Java" => "#b07219",
            "C#" => "#178600",
            "PHP" => "#4F5D95",
            "TypeScript" => "#2b7489",
            "C++" => "#f34b7d",
            "C" => "#555555",
            "Ruby" => "#701516",
            "Swift" => "#ffac45",
            "Go" => "#375eab",
            "Kotlin" => "#F18E33",
            "Rust" => "#dea584",
            "Objective-C" => "#438eff",
            "Dart" => "#00B4AB",
            "Shell" => "#89e051",
            "Scala" => "#c22d40",
            "Lua" => "#000080",
            "R" => "#198ce7",
            "Perl" => "#0298c3",
            "Haskell" => "#5e5086",
            "Groovy" => "#e69f56",
            "HTML" => "#e44b23",
            "CSS" => "#563d7c",
            "Vue.js" => "#41b883",
            "React" => "#61dafb",
            "Angular" => "#b52e31",
            "SQL" => "#336791",
            "Assembly" => "#6E4C13",
            "Shell Script" => "#89e051",
            "Objective-C++" => "#6866fb",
            "Racket" => "#3c5caa",
            "Dockerfile" => "#384d54",
            "PowerShell" => "#012456",
            "Elixir" => "#6e4a7e",
            "Clojure" => "#db5855",
            "Matlab" => "#bb92ac",
            "VHDL" => "#adb2cb",
            "Ada" => "#02f88c",
            "Prolog" => "#74283c",
            "Fortran" => "#4d41b1",
            "COBOL" => "#125F8A",
            "ABAP" => "#E8274B",
            "Apex" => "#1797c0",
            "F#" => "#b845fc",
            "Scheme" => "#1e4aec",
            "Smalltalk" => "#596706"
        );

        $langsarray = array_keys($coreslangs);
        foreach ($langsarray as $lang) {
            if ($lang == $data['lang']) {
                $langescolhida = $lang;
            }
        }
        $langescolhida = $coreslangs[$langescolhida];

        return view('githubcard', ['data' => $data, 'corlang' => $langescolhida]);
    }
}
