Module demonstrating bug reported in https://github.com/magento/magento2/issues/39217

1. Run setup upgrade and DI compilation

2. Run `example:sync:schedule` command to schedule test.

3. If cron is not set up to run, run `cron:run` command to allow the message queue consumer to run.

4. Check logs for errors.

Resulting error should be that SyncRequestData class can't be instantiated due to missing parameters.
