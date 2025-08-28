# Scaling
- **Single Binary, Multi-role:** Combines web server + PHP runtime which simplifies deployment.
- **Horizontal Scaling:** Run multiple FrankenPHP instances behind a load balancer like Traefik (or a Kubernetes Service).
- **Persistent Workers:** Optional long-running PHP workers improve performance for CPU-bound tasks.
- **Autoscaling Ready:** Docker, Docker Swarm or Kubernetes Horizontal Pod Autoscaler (HPA) scaling works natively.

**Tip:** Treat FrankenPHP instances like stateless microservices to maximize concurrency and minimize bottlenecks.

## Live Example

From the repository root run:

```shell
docker compose -f docker-compose-loadbalancer.yml up
```

Monitor the log output and wait for the frankenphp containers to become healthy and Traefik being notified about their presence.
In you browser, visit https://localhost/ multiple times.
The log output should show that the requests are being handled by different frankenphp instances.

---
<img src="../images/elephant_footer.svg" alt="FrankenPHP" width="100" height="100" />