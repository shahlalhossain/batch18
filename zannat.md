html


user@DESKTOP-5BCI2KT MINGW64 /f/laragon/www/batch18/batch18 (main)
$ git branch
* main

user@DESKTOP-5BCI2KT MINGW64 /f/laragon/www/batch18/batch18 (main)
$ git checkout -b farija
Switched to a new branch 'farija'

user@DESKTOP-5BCI2KT MINGW64 /f/laragon/www/batch18/batch18 (farija)
$ git status
On branch farija
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   Monira/index.html

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        farija.md

no changes added to commit (use "git add" and/or "git commit -a")

user@DESKTOP-5BCI2KT MINGW64 /f/laragon/www/batch18/batch18 (farija)
$ git init
Reinitialized existing Git repository in F:/laragon/www/batch18/batch18/.git/

user@DESKTOP-5BCI2KT MINGW64 /f/laragon/www/batch18/batch18 (farija)
$ git status
On branch farija
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   Monira/index.html

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        farija.md
        zannat.md

no changes added to commit (use "git add" and/or "git commit -a")

user@DESKTOP-5BCI2KT MINGW64 /f/laragon/www/batch18/batch18 (farija)
$ git add .

user@DESKTOP-5BCI2KT MINGW64 /f/laragon/www/batch18/batch18 (farija)
$ git commit -m "farija"
[farija 098c54d] farija
 2 files changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 farija.md
 create mode 100644 zannat.md

user@DESKTOP-5BCI2KT MINGW64 /f/laragon/www/batch18/batch18 (farija)
$ git push origin farija
Enumerating objects: 3, done.
Counting objects: 100% (3/3), done.
Delta compression using up to 4 threads
Compressing objects: 100% (2/2), done.
Writing objects: 100% (2/2), 268 bytes | 268.00 KiB/s, done.
Total 2 (delta 1), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
remote:
remote: Create a pull request for 'farija' on GitHub by visiting:
remote:      https://github.com/shahlalhossain/batch18/pull/new/farija
remote:
To https://github.com/shahlalhossain/batch18
 * [new branch]      farija -> farija

user@DESKTOP-5BCI2KT MINGW64 /f/laragon/www/batch18/batch18 (farija)
$
