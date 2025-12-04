<?php

namespace Drupal\events_api\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\JsonResponse;

class UpcomingEventsController extends ControllerBase {

  public function getUpcomingEvents() {
    $query = \Drupal::entityQuery('node')
      ->condition('type', 'event')
      ->condition('field_event_date_time', date('Y-m-d\TH:i:s'), '>=')
      ->sort('field_event_date_time', 'ASC')
      ->range(0, 10);

    $nids = $query->execute();
    $nodes = Node::loadMultiple($nids);

    $data = [];

    foreach ($nodes as $node) {
      $data[] = [
        'title' => $node->label(),
        'date' => $node->get('field_event_date_time')->value,
        'location' => $node->get('field_location')->value,
        'summary' => $node->get('field_summary')->value,
        'image' => file_create_url($node->get('field_image')->entity->getFileUri()),
        'category' => $node->get('field_category')->entity->label(),
      ];
    }

    return new JsonResponse($data);
  }

}
