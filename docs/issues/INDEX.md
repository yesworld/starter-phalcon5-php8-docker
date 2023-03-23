### auto crlf in git

Errors:
```
phalcon-php | exec /usr/local/bin/entrypoint.sh: no such file or directory
```
or like this
```
/bin/bash^M: bad interpreter: No such file or directory
```

Unix uses different line endings, so can't read the file you created in Windows. That is why it sees ^M as an invalid character.
If you want to write a file in Windows and then transfer it to Unix, make sure that your editor is set to create files in UNIX format.

These messages are due to an incorrect default value of **core.autocrlf** on Windows.
The concept of autocrlf is to handle line endings conversions transparently. And it does!

**Bad news**: the value needs to be configured manually.

**Good news**: it should only be done one time per Git installation (per project setting is also possible).

[Source](https://stackoverflow.com/questions/1967370/git-replacing-lf-with-crlf)

When does this warning show up (under Windows)?

    autocrlf = true if you have unix-style lf in one of your files (= RARELY),
    autocrlf = input if you have win-style crlf in one of your files (= almost ALWAYS),
    autocrlf = false – NEVER!

### Solve!
```shell
git config --global core.autocrlf false
```
