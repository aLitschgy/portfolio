new svgMap({
    targetElementID: 'svgMap',
    noDataText: 'Not visited yet',
    mouseWheelZoomEnabled : true,
    mouseWheelZoomWithKey : true,
    showZoomReset : true,
    colorMax: '#57c9e0',
    data: {
      data: {
        visited: {
          name: '',
          format: 'Visited',
          thousandSeparator: ',',
          thresholdMax: 2030,
          thresholdMin: 0
        }
      },
      applyData: 'visited',
      values: {
        FR: { visited: true},
        DE: { visited: true},
        GB: { visited: true},
        SE: { visited: true},
        CH: { visited: true},
        TR: { visited: true},
        ES: { visited: true},
        PT: { visited: true},
        HR: { visited: true},
        EC: { visited: true},
        NZ: { visited: true},
        AU: { visited: true}
        
        // ...
      }
    }
  });